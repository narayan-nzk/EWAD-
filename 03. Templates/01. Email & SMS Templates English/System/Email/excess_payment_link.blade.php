<table border="0" align="center" cellpadding="0" cellspacing="0" width="600"
    style="width:600px;max-width:600px;margin:0 auto;">
    <tbody>
        <tr>
            <td align="left" bgcolor="#FFFFFF" style="padding: 30px;">
                <p style="margin:0px 0px 20px;">Dear <strong>{USER_NAME}</strong>,</p>
                <p style="margin:0px 0px 20px;">We hope this message finds you well.</p>
                <p style="margin:0px 0px 20px;">We kindly request you to pay an excess amount of AED <strong>{AMOUNT}</strong>, as required by policy terms and conditions.</p>
                <p style="margin:0px 0px 10px;">Please ensure that this payment is completed within 3 days as per the policy terms to proceed with your claim. Once the payment is made, we will continue processing your claim.</p>
                <p style="margin:0px 0px 10px;">Please note that excess payment does not create a customer right to repair or replacement. Based on the diagnosis, availability of the device, or at the sole discretion of the assistance company, the repair/replacement decision may change. Additional excess payment may be requested, or if extra excess was collected, it may be returned accordingly.</p>
                <p style="margin:0px 0px 20px;">You can track your claim by visiting this <a href="{{env('APP_URL')}}/track-claim-status" target="_blank">link</a>.</p>
                <p style="margin:0px 0px 20px;font-weight:600;">
                    <a href="{PAYMENT_LINK}" target="_blank" style="border: solid 1px #696cff;padding: 10px;border-radius: 8px;width: 100%;display: block;text-align: center;color: #FFF;background: #696cff;">Click here to Pay Online</a>
                    <span style="margin-top:5px;display:block;text-align:center;font-size:12px;">Powered By Stripe</span>
                </p>
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