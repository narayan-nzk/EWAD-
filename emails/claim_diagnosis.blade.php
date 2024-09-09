<table border="0" align="center" cellpadding="0" cellspacing="0" width="600"
    style="width:600px;max-width:600px;margin:0 auto;">
    <tbody>
        <tr>
            <td align="left" bgcolor="#FFFFFF" style="padding: 30px;">
                <p style="margin:0px 0px 20px;">Dear <strong>{USER_NAME}</strong>,</p>
                <p style="margin:0px 0px 20px;">We hope this message finds you well. We're writing to request you to collect below device.</p>
                <ul>
                    <li>Retailer: <strong>{RETAILER}</strong></li>
                    <li>Device: <strong>{DEVICE}</strong></li>
                    <li>IMEI Number: <strong>{IMEI_NO}</strong></li>
                    <li>Address for Pick up: <strong>{PICKIP_ADDRESS}</strong></li>
                    <li>Mobile number of customer: <strong>{CUSTOMER_MOBILE}</strong></li>
                    <li>Policy Type: <strong>{POLICY_TYPE}</strong></li>
                    {CLAIM_COMMENT}
                </ul>
                <p style="margin:0px 0px 20px;">Will request you to attend the case at the soonest and submit your diagnosis to people copied in this mail. Thanks.</p>
            </td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <td align="left" bgcolor="#f0f0f0" style="padding: 30px;">
                <p style="margin:0px;">Best regards,</p>
                <p style="margin:0px;"><a href="{{env('APP_URL')}}" target="_blank">{{env('APP_NAME')}}</a></p>
                <p style="margin:20px 0px 0px;font-style: italic;color:#000;"><small>If it’s an Extended Warranty case it will only cover issues which will be covered under manufacturer warranty. Therefore, if identified issue is not covered under manufacturer warranty then please ask customer to pay else please do not do the service as we won’t cover for the same.</small></p>
            </td>
        </tr>
    </tfoot>
</table>
