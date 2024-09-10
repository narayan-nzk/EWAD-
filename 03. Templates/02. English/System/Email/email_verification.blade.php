<table border="0" align="center" cellpadding="0" cellspacing="0" width="600"
    style="width:600px;max-width:600px;margin:0 auto;">
    <tbody>
        <tr>
            <td align="left" bgcolor="#FFFFFF" style="padding: 30px;">
                <p style="margin:0px 0px 20px;">Dear <strong>{USER_NAME}</strong>,</p>
                <p style="margin:0px 0px 20px;">Thank you for registering!</p>
                <p style="margin:0px 0px 20px;font-weight:400;">To complete your registration, please verify your email address by clicking the link below:</p>
                <p style="margin:0px 0px 20px;font-weight:400;">
                    <a href="{EMAIL_VERIFY_LINK}" style="display:inline-block;color:#FFF;background:#696cff;border:solid 1px #696cff;padding:10px 20px;border-radius:20px;">Verify Now</a>
                </p>
                <p style="margin:0px 0px 10px;font-weight:400;">If you did not create an account with us, please ignore this email.</p>
            </td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <td align="left" bgcolor="#f0f0f0" style="padding: 30px;">
                <p style="margin:0px;">Best regards,</p>
                <p style="margin:0px;"><a href="{{env('APP_URL')}}" target="_blank">{{env('APP_NAME')}}</a></p>
                <p style="margin:20px 0px 0px;font-style: italic;color:#000;"><small>The information mentioned in this email is a general guide. The issuance and acceptance of this email does NOT constitute an admission of liability or waiver of rights.</small></p>
            </td>
        </tr>
    </tfoot>
</table>