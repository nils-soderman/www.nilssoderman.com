const DATA_URL = "./photo-data.json"
const UNSPLASH_PHOTO_URL = "https://images.unsplash.com/photo-";

const CONTAINER_ID = "main-photo-container";

function CreateImageElement(ID, ImageData) {
    const width = 300;
    const height = ImageData.height * (width / ImageData.width);
    /*
    const width = 300;
    const height = ImageData.height * (width / ImageData.width);
    const ImageElement = document.createElement('div');
    const Parent = document.createElement('div');
    ImageElement.style = "height:" + height + "px;width:300px;";
    Parent.className = "photo";
    ImageElement.width
    Parent.appendChild(ImageElement);
    return Parent;*/

    const ImageElement = document.createElement('img');
    ImageElement.style = "background-color:gray;"
    ImageElement.src = UNSPLASH_PHOTO_URL + ID + "?width=300";
    return ImageElement;
}


function BuildPage(ImageData){
    const Container = document.getElementById("image-list");

    i = 0;
    for (const ID in ImageData) {
        const Data = ImageData[ID];
        ImageElement = CreateImageElement(ID, Data);
        Container.appendChild(ImageElement);
        i++;
    }

}

function OnPhotoDataFetched(Data) {
    BuildPage(Data);
}

function GetRequest(Url, Callback, bParseJson = false) {
    var Request = new XMLHttpRequest();
    Request.onreadystatechange = function () {
        if (Request.readyState == 4 && Request.status == 200) {
            Response = bParseJson ? JSON.parse(Request.responseText) : Request.responseText;
            Callback(Response);
        }

    }
    Request.open("GET", Url, true);
    Request.send();
}


function main() {
    GetRequest(DATA_URL, OnPhotoDataFetched, true);
}
main();