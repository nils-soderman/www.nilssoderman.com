/** Max Number of items to show per page */
const MAX_ITEMS = 5;

// Global variables
const TAGS_HOLDER = document.getElementById("tags");
const ITEMS_HOLDER = document.getElementById("dl-items");
const NO_RESULTS_HOLDER = document.getElementById("no-results");
const DATA_URL = "../resources/data/download-items.json";
let DOWNLOAD_ITEMS = [];


function Filter() {
    const searchQuery = document.getElementById("search-filter").value;
    let FilterTag = document.querySelector('input[name="tag-filter"]:checked').value;
    if (FilterTag == "All")
        FilterTag = null;
    const bFilter = searchQuery != "" || FilterTag != null;

    let n = 0;
    DOWNLOAD_ITEMS.forEach(Item => {
        if (n > MAX_ITEMS) {
            Item.Node.hidden = true;
            return;
        }
        if (!bFilter) {
            Item.Node.hidden = false;
            n++;
            return;
        }

        // Tags
        if (FilterTag) {
            if (!Item.Data.tags.includes(FilterTag)) {
                Item.Node.hidden = true;
                return;
            }
        }

        // Search Query
        for (let Keyword of searchQuery.split(" ")) {
            Keyword = Keyword.toLowerCase()
            if (Item.Data.title.toLowerCase().includes(Keyword))
                continue;
            if (Item.Data.desc.toLowerCase().includes(Keyword))
                continue;
            Item.Node.hidden = true;
            return;
        };
        
        Item.Node.hidden = false;
        n++;
    });

    NO_RESULTS_HOLDER.hidden = n != 0;

}


/** Add a tag */
function AddTag(Tag) {
    const TagInput = document.createElement("input");
    const TagLabel = document.createElement("label");
    
    const TagId = "tag-" + Tag.toLowerCase();
    TagLabel.innerHTML = Tag;
    TagLabel.htmlFor = TagId;
    TagLabel.className = "tag-label";
    
    TagInput.id = TagId;
    TagInput.type = "radio";
    TagInput.onchange = Filter;
    TagInput.name = "tag-filter";
    TagInput.value = Tag;
    TagInput.className = "tag-input";
    
    TAGS_HOLDER.appendChild(TagInput);    
    TAGS_HOLDER.appendChild(TagLabel);
    
    return TagInput
}

/** Add a download item */
function CreateListItem(Title, Desc, PageID){
    const ItemDiv = document.createElement("div");
    ItemDiv.className = "dl-item";

    // Thumbnail
    const ThumbnailLink = document.createElement("a");
    ThumbnailLink.href = "./" + PageID;
    
    const ThumbnailHolder = document.createElement("img");
    ThumbnailHolder.src = "./" + PageID + "/thumbnail.jpg";
    ThumbnailHolder.className = "dl-img"
    ThumbnailHolder.alt = Title;
    ThumbnailLink.appendChild(ThumbnailHolder)
    
    ItemDiv.appendChild(ThumbnailLink);
    
    // Info
    const TextInfoHolder = document.createElement("div");
    TextInfoHolder.className = "dl-text"
    
    //Title 
    const TitleLink = document.createElement("a");
    TitleLink.href = "./" + PageID;

    const TitleElement = document.createElement("h2");
    TitleElement.className = "dl-title"
    TitleElement.innerHTML = Title;
    TitleLink.appendChild(TitleElement);
    
    TextInfoHolder.appendChild(TitleLink);

    const DescElemenet = document.createElement("p");
    DescElemenet.className = "dl-description"
    DescElemenet.innerHTML = Desc;
    TextInfoHolder.appendChild(DescElemenet);

    ItemDiv.appendChild(TextInfoHolder);

    return ItemDiv;
}


function _DataRecived(Response) {
    let Tags = [];

    document.getElementById("loading").remove();
    document.getElementById("page-content").hidden = false;

    const Data = JSON.parse(Response);
    Data.items.forEach(Item => {
        Item.tags.forEach(Tag => {
            if (!Tags.includes(Tag))
                Tags.push(Tag);
        });

        const Node = CreateListItem(Item.title, Item.desc, Item.page);
        DOWNLOAD_ITEMS.push({"Node": Node, Data: Item})
        ITEMS_HOLDER.appendChild(Node);
    });

    // Tags
    Node = AddTag("All");
    Node.checked = true;
    Tags.sort();
    Tags.forEach(Tag => {
        AddTag(Tag);
    })    
}


function main() {
    // Get the data
    var Request = new XMLHttpRequest();
    Request.onreadystatechange = function() { 
        if (Request.readyState == 4 && Request.status == 200)
            _DataRecived(Request.responseText);
    }
    Request.open("GET", DATA_URL, true);
    Request.send();
}
main();