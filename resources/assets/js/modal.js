var _MODAL = undefined;

$(function () {
    'use strict';

    $.fn.modal = function(options) {

        $.Modal = function(settings)
        {
            let p = this;
            let defaults = {

                // Markup
                containerId : 'modal',
                containerClass : 'modal',
                backClass : 'modal-background',
                closeClass : 'is-close',
                openClass : 'is-open',
                hideClass: 'modal-hide',
                modalAnimationSpeed: 300,

                // Callbacks
                error : function(p, data){
                    if(data === undefined)
                        alert('Error');
                    else
                        alert(data.code + ': ' + data.message);
                },
            };

            let $container;
            let $identifier;
            let $back;
            let $p;

            p.o = $.extend(true, {}, defaults, settings);

            p.open = function(ele){

                // Get identifier
                let id = $(ele).attr('data-modal');

                // Cache check
                if( _MODAL === undefined || _MODAL != p || (_MODAL != undefined && $identifier != id) ){

                    if(_MODAL != p ||(_MODAL != undefined && $identifier != id)) {
                        p.cleanUp();
                    }

                    // Set identifier in plugin
                    $identifier = id;

                    // Get content url
                    let content = $(ele).attr('href');
                    if( content === null){
                        p.o.error.call(p, content);
                        return false;
                    }

                    // Create modal container
                    $container = $('<div id="'+p.o.containerId+'" class="'+p.o.openClass +'" />')
                        .prependTo($('body'));

                    // Create back and fade in
                    $back = $('<div class="'+p.o.backClass+'"/>')
                        .appendTo($container)
                        .on('click', function(e){
                            p.close(e);
                        });

                    // Get Ajax Content
                    $.ajax({
                        url : content,
                        success : function(data){
                            showContent(data.data);
                        },
                        error : function(data){
                            p.o.error.call(p, data);
                        }
                    });
                } else {
                    // Just show the modal again
                    $container.show();
                    $container.toggleClass(p.o.openClass + " " + p.o.closeClass);
                }

                return p;
            };

            /**
             * Shows the content
             *
             * @param  {string} content
             */
            function showContent(content){

                // Set modal container and put in the content
                $container.append(content);
                $p = $("." + p.o.containerClass);

                // Add hide button function
                p.addHide();
            }

            p.addHide = function(e) {
                $p.find('.' + p.o.hideClass)
                    .on('click', function(e){
                        p.close(e);
                    });
            }

            /**
             * Close the modal
             *
             * @return {Object}
             */
            p.close = function(e){
                if(e !== undefined) e.preventDefault();
                $container.toggleClass(p.o.openClass + " " + p.o.closeClass);
                setTimeout(() => {
                    $container.hide();
                }, p.o.modalAnimationSpeed)
                return p;

            };

            /**
             * Clean up the modal
             *
             * @return {Object}
             */
            p.cleanUp = function(){

                // Can not remove $container, maybe there is another modal instance!
                $('#' + p.o.containerId).remove();
                $container = $p = $back = undefined;
                _MODAL = undefined;

                return p;

            };
        };

        let $modal = new $.Modal(options);
        return this.each( function() {
            $(this).on('click', function(e){
                e.preventDefault();
                _MODAL = $modal.open(this);
            });
        });
    };
}(jQuery));