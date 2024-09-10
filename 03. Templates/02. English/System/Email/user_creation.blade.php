<table border="0" align="center" cellpadding="0" cellspacing="0" width="600"
    style="width:600px;max-width:600px;margin:0 auto;">
    <tbody>
        <tr>
            <td align="left" bgcolor="#FFFFFF" style="padding: 30px;">
                <p style="margin:0px 0px 20px;">Dear <strong>{USER_NAME}</strong>,</p>
                <p style="margin:0px 0px 20px;">Welcome to EWAD portal! Thank you for creating your User ID. Below are the details:</p>
                <ul>
                    <li>User ID: <strong>{USER_EMAIL}</strong></li>
                    <li>Mobile Number: <strong>{USER_MOBILE}</strong></li>
                </ul>
                <p style="margin:0px 0px 10px;font-weight:500;">You can visit this <a href="{{env('APP_URL')}}" target="_blank">link</a> to register new claim or track filed claim using your User ID.</p>
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
