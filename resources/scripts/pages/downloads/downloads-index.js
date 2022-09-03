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