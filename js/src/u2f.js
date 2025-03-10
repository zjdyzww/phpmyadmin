import $ from 'jquery';
import { AJAX } from './ajax.js';
import { Functions } from './functions.js';

AJAX.registerOnload('u2f.js', function () {
    var $inputReg = $('#u2f_registration_response');
    if ($inputReg.length > 0) {
        var $formReg = $inputReg.parents('form');
        $formReg.find('input[type=submit]').hide();
        setTimeout(function () {
            // A magic JS function that talks to the USB device. This function will keep polling for the USB device until it finds one.
            var request = JSON.parse($inputReg.attr('data-request'));
            window.u2f.register(request.appId, [request], JSON.parse($inputReg.attr('data-signatures')), function (data) {
                // Handle returning error data
                if (data.errorCode && data.errorCode !== 0) {
                    switch (data.errorCode) {
                    case 5:
                        Functions.ajaxShowMessage(window.Messages.strU2FTimeout, false, 'error');
                        break;
                    case 4:
                        Functions.ajaxShowMessage(window.Messages.strU2FErrorRegister, false, 'error');
                        break;
                    case 3:
                        Functions.ajaxShowMessage(window.Messages.strU2FInvalidClient, false, 'error');
                        break;
                    case 2:
                        Functions.ajaxShowMessage(window.Messages.strU2FBadRequest, false, 'error');
                        break;
                    default:
                        Functions.ajaxShowMessage(window.Messages.strU2FUnknown, false, 'error');
                        break;
                    }
                    return;
                }

                // Fill and submit form.
                $inputReg.val(JSON.stringify(data));
                $formReg.trigger('submit');
            });
        }, 1000);
    }
    var $inputAuth = $('#u2f_authentication_response');
    if ($inputAuth.length > 0) {
        var $formAuth = $inputAuth.parents('form');
        $formAuth.find('input[type=submit]').hide();
        setTimeout(function () {
            // Magic JavaScript talking to your HID
            // appid, challenge, authenticateRequests
            var request = JSON.parse($inputAuth.attr('data-request'));
            window.u2f.sign(request[0].appId, request[0].challenge, request, function (data) {
                // Handle returning error data
                if (data.errorCode && data.errorCode !== 0) {
                    switch (data.errorCode) {
                    case 5:
                        Functions.ajaxShowMessage(window.Messages.strU2FTimeout, false, 'error');
                        break;
                    case 4:
                        Functions.ajaxShowMessage(window.Messages.strU2FErrorAuthenticate, false, 'error');
                        break;
                    case 3:
                        Functions.ajaxShowMessage(window.Messages.strU2FInvalidClient, false, 'error');
                        break;
                    case 2:
                        Functions.ajaxShowMessage(window.Messages.strU2FBadRequest, false, 'error');
                        break;
                    default:
                        Functions.ajaxShowMessage(window.Messages.strU2FUnknown, false, 'error');
                        break;
                    }
                    return;
                }

                // Fill and submit form.
                $inputAuth.val(JSON.stringify(data));
                $formAuth.trigger('submit');
            });
        }, 1000);
    }
});
