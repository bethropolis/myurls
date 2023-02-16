// Get the current tab's URL
chrome.tabs.query({ active: true, currentWindow: true }, function(tabs) {
  const url = tabs[0].url;

  // Send the URL to the background script to be sent to the server
  chrome.runtime.sendMessage({ url: url }, function(response) {
    if (response.success) {
      // Display the response from the server in the popup
      console.log(response.data);
    } else {
      console.error(response.error);
    }
  });
});
