(function ($) {
    'use strict';
    $(function () {
        var wtso_bfcm_twenty_twenty_six_banner = {
            init: function () { 
                var data_obj = {
                    _wpnonce: wtso_bfcm_twenty_twenty_six_banner_js_params.nonce,
                    action: wtso_bfcm_twenty_twenty_six_banner_js_params.action,
                    wtso_bfcm_twenty_twenty_six_banner_action_type: '',
                };
                $(document).on('click', '.wtso-bfcm-banner-2026 .notice-dismiss', function(e) {
                    e.preventDefault();
                    data_obj['wtso_bfcm_twenty_twenty_six_banner_action_type'] = 2; // Closed by user
                    
                    $.ajax({
                        url: wtso_bfcm_twenty_twenty_six_banner_js_params.ajax_url,
                        data: data_obj,
                        type: 'POST',
                    });
                });
            }
        };
        wtso_bfcm_twenty_twenty_six_banner.init();
    });
})(jQuery);