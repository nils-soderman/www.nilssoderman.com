/** Max Number of items to show per page */
const MAX_ITEMS = 5;

// Global variables
const TAGS_HOLDER = document.getElementById("tags");
const ITEMS_HOLDER = document.getElementById("dl-items");
const NO_RESULTS_HOLDER = document.getElementById("no-results");
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


function CollectElements() {
    let Elements = []
    for (let Element of document.getElementsByClassName("dl-item")) {
        NewItem = {}
        NewItem.Node = Element;

        let Title = ""
        let Desc = ""

        const TitleElements = Element.getElementsByClassName("dl-title");
        if (TitleElements) {
            Title = TitleElements[0].innerHTML;
        }

        const DescElements = Element.getElementsByClassName("dl-description");
        if (DescElements) {
            Desc = DescElements[0].innerHTML;
        }

        let Tags = Element.getAttribute("tags");
        if (Tags) {
            Tags = Tags.split(",");
        }
        else {
            Tags = []
        }

        NewItem.Data = { title: Title, desc: Desc, tags: Tags }

        Elements.push(NewItem)
    }

    return Elements;
}


function Initialize() {
    DOWNLOAD_ITEMS = CollectElements();

    for (const Input of TAGS_HOLDER.getElementsByTagName("input")) {
        Input.onchange = Filter;
    }

}
Initialize();