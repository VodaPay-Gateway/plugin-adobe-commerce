/*browser:true*/
/*global define*/
define(
    [
        'uiComponent',
        'Magento_Checkout/js/model/payment/renderer-list'
    ],
    function (Component,
              rendererList
    ) {
        'use strict';

        rendererList.push(
            {
                type: 'vodapay',
                component: 'Vodapay_Vodapay/js/view/payment/method-renderer/vodapay-method'
            }
        );
        /** Add view logic here if needed */
        return Component.extend({});
    }
);
