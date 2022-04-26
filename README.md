
# URL to upload to Google Drive with out google drive api

![Logo](https://i.ibb.co/GHj8zjp/image.png)


## Isi file

- code.gs (upload this file on your google apps script)
- upload.php (upload to google drive with api)
- simpleuploadjquery.html (simple for upload file with jquery html)
- ajaxuploadfile.html (simple for upload with ajax jqeury)





## Support

For support, email syahdanfilsafan58@gmail.com or [whats app](https://wa.me/628998937095/) .


## How To Install
1. Sample script
2. Create a standalone script.
- Also you can do this flow at bound scripts. Here, a standalone script is used.
- Copy and paste the following sample script, and save it.
- Please run doGet(e). By this, although an error occurs, the authorization process can be done.


## code.gs

```gs
pip install foobarfunction doGet(e) {
  var blob = UrlFetchApp.fetch(e.parameters.url).getBlob();
  var id = DriveApp.createFile(blob).getId();
  return ContentService.createTextOutput(id);
}
```


## Deployed
Deploy Web Apps.
- On script editor, at menu bar, select Publish -> Deploy as Web App.
- At "Project version:", input string.
- At "Execute the app as:", select "Me".
- At "Who has access to the app:", select "Anyone, even anonymous".
- Click "Deploy" button.
- Please copy "Current web app URL:". The URL is https://script.google.com/macros/s/#####/exec.
- You can upload files using this URL.
- Click "OK".
##  Upload a file from the URL
- Query parameter is url=http://example.com/file.doc.
- You can upload file.doc by accessing this URL https://script.google.com/macros/s/#####/exec?url=http://example.com/file.doc using your browser.
- In this sample script, the upload file is created on root folder on your Google Drive.
## Note:
- About Web Apps, if you update your script, please redeploy Web Apps as new version. By this, the updated script is reflected.
- This sample script is very simple. So please modify this to your environment. At that time, if you have any problems, feel free to tell me.
- In this case, when users upload files using the Web Apps URL, the files are uploaded to Google Drive of the owner who deployed Web Apps. Because the script is run as the only owner.
- If this was not useful for you, I'm sorry.
## Refrensi
https://stackoverflow.com/questions/47833728/url-to-upload-to-google-drive
