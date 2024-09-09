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
                <p style="margin:0px 0px 20px;">We're writing to confirm that we've successfully received your claim submission. Here are the details:</p>
                <p style="margin:0px 0px 20px;font-weight:600;">Claim Details:</p>
                <ul>
                    <li>Claim No: <strong>{CLAIM_NO}</strong></li>
                    <li>Invoice No: <strong>{INVOICE_NO}</strong></li>
                    <li>Claim Type: <strong>{CLAIM_TYPE}</strong>
                    <li>Date of Incident: <strong>{DATE_OF_INCIDENT}</strong></li>
                    <li>Describe: <strong>{DESCRIBE_REASON}</strong></li>
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
