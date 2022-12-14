<?php

//// Create user agent string
// User agent constituents (for cURL)
define( 'PN_SOFTWARE_NAME', 'Magento' );
define( 'PN_SOFTWARE_VER', '2.0' );
define( 'PN_MODULE_NAME', 'PayNow-Magento-v2' );
define( 'PN_MODULE_VER', '1.1' );

// Features
// - PHP
$pnFeatures = 'PHP ' . phpversion() . ';';

// - cURL
if( in_array( 'curl', get_loaded_extensions() ) )
{
    define( 'PN_CURL', '' );
    $pnVersion = curl_version();
    $pnFeatures .= ' curl ' . $pnVersion['version'] . ';';
}
else
    $pnFeatures .= ' nocurl;';

// Create user agrent
define( 'PN_USER_AGENT', PN_SOFTWARE_NAME . '/' . PN_SOFTWARE_VER . ' (' . trim( $pnFeatures ) . ') ' . PN_MODULE_NAME . '/' . PN_MODULE_VER );

// General Defines
define( 'PN_TIMEOUT', 15 );
define( 'PN_EPSILON', 0.01 );

// Messages
    // Error
define( 'PN_ERR_AMOUNT_MISMATCH', 'Amount mismatch' );
define( 'PN_ERR_BAD_ACCESS', 'Bad access of page' );
define( 'PN_ERR_BAD_SOURCE_IP', 'Bad source IP address' );
define( 'PN_ERR_CONNECT_FAILED', 'Failed to connect to PayNow' );
define( 'PN_ERR_INVALID_SIGNATURE', 'Security signature mismatch' );
define( 'PN_ERR_MERCHANT_ID_MISMATCH', 'Merchant ID mismatch' );
define( 'PN_ERR_NO_SESSION', 'No saved session found for ITN transaction' );
define( 'PN_ERR_ORDER_ID_MISSING_URL', 'Order ID not present in URL' );
define( 'PN_ERR_ORDER_ID_MISMATCH', 'Order ID mismatch' );
define( 'PN_ERR_ORDER_INVALID', 'This order ID is invalid' );
define( 'PN_ERR_ORDER_PROCESSED', 'This order has already been processed' );
define( 'PN_ERR_PDT_FAIL', 'PDT query failed' );
define( 'PN_ERR_PDT_TOKEN_MISSING', 'PDT token not present in URL' );
define( 'PN_ERR_SESSIONID_MISMATCH', 'Session ID mismatch' );
define( 'PN_ERR_UNKNOWN', 'Unkown error occurred' );

    // General
define( 'PN_MSG_OK', 'Payment was successful' );
define( 'PN_MSG_FAILED', 'Payment has failed' );
define( 'PN_MSG_PENDING',
    'The payment is pending. Please note, you will receive another Instant'.
    ' Transaction Notification when the payment status changes to'.
    ' "Completed", or "Failed"' );

// {{{ pnLog
/**
 * pnlog
 *
 * Log function for logging output.
 *
 * @author Jonathan Smit
 * @param $msg String Message to log
 * @param $close Boolean Whether to close the log file or not
 */
function pnlog( $msg = '', $close = false )
{
    static $fh = 0;
    global $module;

    // Only log if debugging is enabled
    if( PN_DEBUG )
    {
        if( $close )
        {
            fclose( $fh );
        }
        else
        {
            // If file doesn't exist, create it
            if( !$fh )
            {
                $pathinfo = pathinfo( __FILE__ );
                try {
	                $fh = fopen( $pathinfo['dirname'] . '/vodapay.log', 'a+' );
                } catch (\Exception $e) {
                	// Can't write log.
                }
            }

            // If file was successfully created
            if( $fh )
            {
                $line = date( 'Y-m-d H:i:s' ) .' : '. $msg ."\n";

                fwrite( $fh, $line );
            }
        }
    }
}
// }}}
// {{{ pfGetData
/**
 * pnGetData
 *
 * @author Jonathan Smit
 */
function pnGetData()
{
    // Posted variables from ITN
    $pfData = $_POST;

    // Strip any slashes in data
    foreach( $pfData as $key => $val )
        $pfData[$key] = stripslashes( $val );

    // Return "false" if no data was received
    if( sizeof( $pfData ) == 0 )
        return [];
    else
        return( $pfData );
}

// }}}
// {{{ pnValidData

/**
 * pnValidData
 *
 * @param $pnHost String Hostname to use
 * @param $pnParamString String
 */
function pnValidData( $pnHost = 'vodapay.co.za', $pnParamString = '' )
{
	return true;
}

// }}}

// {{{ pfAmountsEqual
/**
 * pnAmountsEqual
 *
 * Checks to see whether the given amounts are equal using a proper floating
 * point comparison with an Epsilon which ensures that insignificant decimal
 * places are ignored in the comparison.
 *
 * eg. 100.00 is equal to 100.0001
 *
 * @author Jonathan Smit
 * @param $amount1 Float 1st amount for comparison
 * @param $amount2 Float 2nd amount for comparison
 */
function pnAmountsEqual( $amount1, $amount2 )
{
    if( abs( floatval( $amount1 ) - floatval( $amount2 ) ) > PN_EPSILON )
        return( false );
    else
        return( true );
}
// }}}
