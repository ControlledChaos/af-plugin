/* global jQuery, _AFPCustomizerReset, ajaxurl, wp */

jQuery(function ($) {
    var $container = $('#customize-header-actions');


    var $button = $('<input type="submit" name="afp-reset" id="afp-reset" class="button-secondary button">')
        .attr('value', _AFPCustomizerReset.reset)
        .css({
            'float': 'right',
            'margin-right': '10px',
            'margin-top': '9px'
        });

    $button.on('click', function (event) {
        event.preventDefault();

        var data = {
            wp_customize: 'on',
            action: 'customizer_reset',
            nonce: _AFPCustomizerReset.nonce.reset
        };

        var r = confirm(_AFPCustomizerReset.confirm);

        if (!r) return;

        $button.attr('disabled', 'disabled');

        $.post(ajaxurl, data, function () {
            wp.customize.state('saved').set(true);
            location.reload();
        });
    });

    $container.append($button);
});
