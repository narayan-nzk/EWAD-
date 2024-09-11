<table border="0" align="center" cellpadding="0" cellspacing="0" width="600"
    style="width:600px;max-width:600px;margin:0 auto;">
    <tbody>
        <tr>
            <td align="left" bgcolor="#FFFFFF" style="padding: 30px;">
                <p style="margin:0px 0px 20px;">Dear <strong>{USER_NAME}</strong>,</p>
                <p style="margin:0px 0px 20px;">Please find your one-time password (OTP) below for verification purposes:</p>
                <p style="margin:0px 0px 20px;font-weight:400;">Your OTP is: {OTP_CODE}.</p>
                <p style="margin:0px 0px 10px;font-weight:600;font-size:16px;">Please enter this code on the verification page to complete the process.</p>
                <p style="margin:0px 0px 10px;font-weight:400;">Thank you for using our service.</p>
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
