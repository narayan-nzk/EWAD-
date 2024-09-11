<table border="0" align="center" cellpadding="0" cellspacing="0" width="600"
    style="width:600px;max-width:600px;margin:0 auto;">
    <tbody>
        <tr>
            <td align="left" bgcolor="#FFFFFF" style="padding: 30px;">
                <p style="margin:0px 0px 20px;">Dear <strong>{USER_NAME}</strong>,</p>
                <p style="margin:0px 0px 20px;">We hope this message finds you well. We're writing to request you to resubmit the form as some of the details with respect to your claim form submission is missing.</p>
                <p style="margin:0px 0px 20px;font-weight:600;">Claim Details:</p>
                <ul>
                    <li>Retailer: <strong>{RETAILER}</strong></li>
                    <li>Device: <strong>{DEVICE}</strong></li>
                    <li>Invoice No: <strong>{INVOICE_NO}</strong></li>
                    {CLAIM_COMMENT}
                </ul>
                <p style="margin:0px 0px 20px;">You can resubmit the form by clicking this <a href="{{env('APP_URL')}}/claim-resubmit/{CLAIM_NO}/show" target="_blank">link</a>.</p>
            </td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <td align="left" bgcolor="#f0f0f0" style="padding: 30px;">
                <p style="margin:0px;">Best regards,</p>
                <p style="margin:0px;"><a href="{{env('APP_URL')}}" target="_blank">{{env('APP_NAME')}}</a> and logging into the EWAD portal. After logging in, please go to "Track Claim Status," where you will find a link to edit the form. Please note that you do not need to create a new claim; simply edit the existing form.</p>
                <p style="margin:20px 0px 0px;font-style: italic;color:#000;"><small>The information mentioned in this email is a general guide. Further documents or information may be required depending on the circumstances of your claim. Please note that failure to provide supporting documentation in a timely manner may result in delay or rejection of your claim. The issuance and acceptance of this email does NOT constitute an admission of liability or waiver of rights.</small></p>
            </td>
        </tr>
    </tfoot>
</table>