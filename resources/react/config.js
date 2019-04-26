let token = document.querySelector("#token").getAttribute("content");
let version = document.querySelector("#appVersion").getAttribute("content");
let name = document.querySelector("#appName").getAttribute("content");
let appUrl = document.querySelector("#appUrl").getAttribute("content");
let storageUrl = document.querySelector("#storageUrl").getAttribute("content");

export const
    APP_URL = appUrl,
    APP_NAME = name,
    APP_VERSION = version,
    TOKEN = token,
    STORAGE_URL = storageUrl
