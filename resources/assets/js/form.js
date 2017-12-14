$(function () {
    'use strict';

    $.fn.ajaxForm = function(options) {

        $.AjaxForm = function(settings)
        {
            let a = this;
            let defaults = {

                // Markup
                submitClass: 'form-submit',
                loadingClass: 'loading',
                containerClass : 'popup',
                errorClass: 'input-error',
                errorMsgClass: 'input-error-msg',
                redirectSuccess: false,
                reloadSuccess: false,
                closeSuccess: false,
                closeTimeout: false,
                closeTimeoutTime: 2000,
                popup: undefined,

                // Callbacks
                afterSuccess : function(data){},
                error : function(){
                    alert('Error');
                },
                beforeSubmit : function(){},
                beforeSend : function(){
                    this.loadingStart();
                    this.removeErrors();
                },
                success : function(data){
                    if(this.o.reloadSuccess) {
                        window.location.reload();
                    }
                    else if(this.o.redirectSuccess && data.data) {
                        window.location.href = data.data;
                    }else if(!this.o.closeSuccess && data.data) {
                        this.loadingEnd();
                        $('.' + this.o.containerClass).html(data.data);
                        if(this.o.popup != undefined) {
                            this.o.popup.addHide();
                            if(this.o.closeTimeout) {
                                setTimeout(() => {
                                    this.o.popup.close();
                                }, this.o.closeTimeoutTime);
                            }
                        }
                        this.o.afterSuccess.call(this, data);
                    } else {
                        this.loadingEnd();
                        if(this.o.popup != undefined) this.o.popup.close();
                        this.o.afterSuccess.call(this, data);
                    }
                },
                ajaxError : function(data){
                    console.log(data);
                    this.loadingEnd();
                    $.each( data.errors, function( key, value ) {
                        let ele = $(a.ele).find('#' + key);
                        if(ele != undefined) {
                            if($(ele).hasClass(a.o.errorClass)) {
                                $(ele).siblings('.' + a.o.errorMsgClass).html(value);
                            } else {
                                $(ele).addClass(a.o.errorClass);
                                $(ele).parent().append(
                                    $('<span class="' + a.o.errorMsgClass + '"/>').html(value)
                                );
                                $(ele).one('keydown', function () {
                                    $(this).removeClass(a.o.errorClass);
                                    $(this).siblings('.' + a.o.errorMsgClass).remove();
                                });
                            }
                        }
                    });
                },
            };

            a.ele = undefined;
            a.isLoading = false;
            a.o = $.extend(true, {}, defaults, settings);

            a.submit = function(ele){
                a.o.beforeSubmit.call(a);
                a.ele = ele;

                // If no content is set or already loading
                if( ele.action === null || a.isLoading == true){
                    return false;
                }

                $.ajax({
                    url : ele.action,
                    type: $(ele).attr('method'),
                    cache: false,
                    data: new FormData(ele),
                    contentType: false,
                    processData: false,
                    beforeSend : function() {
                        a.o.beforeSend.call(a);
                    },
                    success : function(data){
                        a.o.success.call(a, data);
                    },
                    error : function(xhr){
                        a.o.ajaxError.call(a, xhr.responseJSON);
                    }
                });
            };

            a.loadingStart = function() {
                if(a.o.submitClass != undefined)
                    $('.' + a.o.submitClass).addClass(a.o.loadingClass)
                a.isLoading = true;
            };

            a.loadingEnd = function() {
                a.isLoading = false;
                if(a.o.submitClass != undefined)
                    $('.' + a.o.submitClass).removeClass(a.o.loadingClass)
            };

            a.removeErrors = function() {
                $(a.ele).find('.' + a.o.errorMsgClass).remove();
                $(a.ele).find('.' + a.o.errorClass).removeClass(a.o.errorClass);
            };
        };

        let _a = new $.AjaxForm(options);
        return this.each( function() {
            $(this).data('ajaxForm', _a);

            $(this).on('submit', function(e){
                e.preventDefault();
                _a.submit(this);
            });
        });

    };
}(jQuery));