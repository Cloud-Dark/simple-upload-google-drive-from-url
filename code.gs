function doGet(e) {
  var blob = UrlFetchApp.fetch(e.parameters.url).getBlob();
  var id = DriveApp.createFile(blob).getId();
  return ContentService.createTextOutput(id);
}
//you can run this script without google drive api and this free
