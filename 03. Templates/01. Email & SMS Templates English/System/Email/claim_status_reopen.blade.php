<table border="0" align="center" cellpadding="0" cellspacing="0" width="600"
    style="width:600px;max-width:600px;margin:0 auto;">
    <tbody>
        <tr>
            <td align="left" bgcolor="#FFFFFF" style="padding: 30px;">
                <p style="margin:0px 0px 20px;">Dear <strong>{USER_NAME}</strong>,</p>
                <p style="margin:0px 0px 20px;">We hope this message finds you well. We're writing to provide you with an update on the reopen status of your claim:</p>
                <p style="margin:0px 0px 20px;font-weight:600;">Claim Details:</p>
                <ul>
                    <li>Device: <strong>{DEVICE}</strong></li>
                    <li>Claim No: <strong>{CLAIM_NO}</strong></li>
                    <li>Invoice No: <strong>{INVOICE_NO}</strong></li>
                    <li>Claim Status: <strong>{CLAIM_STATUS}</strong></li>
                    {CLAIM_COMMENT}
                </ul>
                <p style="margin:0px 0px 20px;">Further, you can track your email by visiting this <a href="{{env('APP_URL')}}/track-claim-status" target="_blank" style="text-decoration: underline;">link</a>.</p>
            </td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <td align="left" bgcolor="#f0f0f0" style="padding: 30px;">
                <p style="margin:0px;">Best regards,</p>
                <p style="margin:0px;"><a href="{{env('APP_URL')}}" target="_blank">{{env('APP_NAME')}}</a></p>
                <p style="margin:20px 0px 0px;font-style: italic;color:#000;"><small>The information mentioned in this email is a general guide. Further documents or information may be required depending on the circumstances of your claim. Please note that failure to provide supporting documentation in a timely manner may result in delay or rejection of your claim. The issuance and acceptance of this email does NOT constitute an admission of liability or waiver of rights.</small></p>
            </td>
        </tr>
    </tfoot>
</table>