chrome.runtime.onMessage.addListener(function(request, sender, sendResponse) {
  // Make a GET request to the server using the URL from the popup
  fetch('http://localhost/url/test.php?url=' + encodeURIComponent(request.url))
    .then(response => response.json())
    .then(data => sendResponse({ success: true, data: data }))
    .catch(error => sendResponse({ success: false, error: error }));
  return true;
});
