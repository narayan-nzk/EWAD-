<table border="0" align="center" cellpadding="0" cellspacing="0" width="600"
    style="width:600px;max-width:600px;margin:0 auto;">
    <tbody>
        <tr>
            <td align="left" bgcolor="#FFFFFF" style="padding: 30px;">
                <p style="margin:0px 0px 20px;">Dear <strong>{USER_NAME}</strong>,</p>
                <p style="margin:0px 0px 20px;">We hope this message finds you well. We regret to inform you that your claim number <strong>{CLAIM_NO}</strong> has been rejected as it doesn't meet the policy terms and conditions.</p>
                <p style="margin:0px 0px 20px;font-weight:600;">Claim Details:</p>
                <ul>
                    <li>Retailer: <strong>{RETAILER}</strong></li>
                    <li>Device: <strong>{DEVICE}</strong></li>
                    <li>Invoice No: <strong>{INVOICE_NO}</strong></li>
                    <li>Claim Status: <strong>{CLAIM_STATUS}</strong></li>
                    {CLAIM_COMMENT}
                </ul>
                <p style="margin:0px 0px 20px;">Thanks for your understanding.</p>
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
