function getJSON(action, url, callback) {
    let xhr = new XMLHttpRequest();
    xhr.onload = function () {
        callback(this.responseText)
    };
    xhr.open(action, url, true);
    xhr.send();
}

export function getContents(action, url, callback) {
    getJSON(action, url, data => callback(JSON.parse(data)));
}
