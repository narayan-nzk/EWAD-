<table border="0" align="center" cellpadding="0" cellspacing="0" width="600"
    style="width:600px;max-width:600px;margin:0 auto;">
    <tbody>
        <tr>
            <td align="center" bgcolor="#f0f0f0" style="padding: 30px;text-align:center;">
                {LOGO}
            </td>
        </tr>
        <tr>
            <td align="left" bgcolor="#FFFFFF" style="padding: 30px;">
                <p style="margin:0px 0px 20px;">Dear <strong>{USER_NAME}</strong>,</p>
                <p style="margin:0px 0px 20px;">We trust this message finds you in good health. We're reaching out to share details regarding a new claim diagnosis:</p>
                <p style="margin:0px 0px 20px;font-weight:600;">Claim Details:</p>
                <ul>
                    <li>Device: <strong>{DEVICE}</strong></li>
                    <li>IMEI: <strong>{IMEI_NO}</strong></li>
                    <li>Pickup Location: <strong>{PICKUP_LOCATION}</strong>
                </ul>
            </td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <td align="left" bgcolor="#f0f0f0" style="padding: 30px;">
                <p style="margin:0px;">Best regards,</p>
                <p style="margin:0px;"><a href="{{env('APP_URL')}}" target="_blank">{{env('APP_NAME')}}</a></p>
            </td>
        </tr>
    </tfoot>
</table>
