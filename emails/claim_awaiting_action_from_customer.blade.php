<table border="0" align="center" cellpadding="0" cellspacing="0" width="600"
    style="width:600px;max-width:600px;margin:0 auto;">
    <tbody>
        <tr>
            <td align="left" bgcolor="#FFFFFF" style="padding: 30px;">
                <p style="margin:0px 0px 20px;">Dear <strong>{USER_NAME}</strong>,</p>
                <p style="margin:0px 0px 20px;">We hope this message finds you well. We're writing to request  to take required action from your end for us to proceed with your claim.</p>
                <p style="margin:0px 0px 20px;font-weight:600;">Claim Details:</p>
                <ul>
                    <li>Retailer: <strong>{RETAILER}</strong></li>
                    <li>Device: <strong>{DEVICE}</strong></li>
                    <li>Invoice No: <strong>{INVOICE_NO}</strong></li>
                    <li>Claim Status: <strong>{CLAIM_STATUS}</strong></li>
                    {CLAIM_COMMENT}
                </ul>
                <p style="margin:0px 0px 20px;">Your prompt action will help us to proceed with your claim. In case of any clarification, you can reach out at <strong>claims@ewad.me</strong>, please mention claim number in the subject. </p>
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