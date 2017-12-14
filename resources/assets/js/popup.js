var _POPUP = undefined;

$(function () {
    'use strict';

    $.fn.popup = function(options) {

        $.Popup = function(settings)
        {
            let p = this;
            let defaults = {

                // Markup
                containerId : 'popup',
                containerClass : 'popup',
                backClass : 'popup-background',
                closeClass : 'popup-close',
                openClass : 'popup-open',
                hideClass: 'popup-hide',
                popupAnimationSpeed: 300,

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
                let id = $(ele).attr('data-popup');

                // Cache check
                if( _POPUP === undefined || _POPUP != p || (_POPUP != undefined && $identifier != id) ){

                    if(_POPUP != p ||(_POPUP != undefined && $identifier != id)) {
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

                    // Create popup container
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
                    // Just show the popup again
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

                // Set popup container and put in the content
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
             * Close the popup
             *
             * @return {Object}
             */
            p.close = function(e){
                if(e !== undefined) e.preventDefault();
                $container.toggleClass(p.o.openClass + " " + p.o.closeClass);
                setTimeout(() => {
                    $container.hide();
                }, p.o.popupAnimationSpeed)
                return p;

            };

            /**
             * Clean up the popup
             *
             * @return {Object}
             */
            p.cleanUp = function(){

                // Can not remove $container, maybe there is another popup instance!
                $('#' + p.o.containerId).remove();
                $container = $p = $back = undefined;
                _POPUP = undefined;

                return p;

            };
        };

        let $popup = new $.Popup(options);
        return this.each( function() {
            $(this).on('click', function(e){
                e.preventDefault();
                _POPUP = $popup.open(this);
            });
        });
    };
}(jQuery));