const DATA_URL = "./photo-data.json"
const UNSPLASH_PHOTO_URL = "https://images.unsplash.com/photo-";

const CONTAINER_ID = "main-photo-container";

function CreateImageContainer(ImageData) {    
    const Parent = document.createElement('div');
    Parent.style = "background-color:gray; min-height:200px; max-height:9999px; width:auto; aspect-ratio:"+ ImageData.width + "/" + ImageData.height
    Parent.className = "photo-container";
    /*
    const ImageElement = document.createElement('img');
    ImageElement.style = "background-color:gray;"
    ImageElement.src = UNSPLASH_PHOTO_URL + ID + "?height=300";
    Parent.appendChild(ImageElement);
*/
    return Parent;
    
}

function AddImageToContainer(ContainerElement, ID) {
    const ImageElement = document.createElement('img');
    
    ImageElement.style = "background-color:gray;"
    ImageElement.src = UNSPLASH_PHOTO_URL + ID + "?height=" + ContainerElement.clientHeight;
    ContainerElement.appendChild(ImageElement);
    ContainerElement.style = "background-color:gray;width:" + ContainerElement.clientWidth + "px;height:" + ContainerElement.clientHeight+"px;";
    return ImageElement;
}

function BuildPage(ImageData){
    const Container = document.getElementById("image-list");
    
    // Build the container first
    i = 0;
    for (const ID in ImageData) {
        const Data = ImageData[ID];
        ImageElement = CreateImageContainer(Data);
        Container.appendChild(ImageElement);
        i++;
    }
    // Add the images to the containers
    i = 0;
    for (const ID in ImageData) {
        ImageContainer = Container.children[i];
        ImageElement = AddImageToContainer(ImageContainer, ID);
        //Container.appendChild(ImageElement)
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
    document.onp
}
main();