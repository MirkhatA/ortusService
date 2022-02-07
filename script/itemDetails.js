

function toggleItem(item1) {
    var item = document.getElementById(item1)

    if (item.className === "catalog-text-shrink") {
        console.log(1);
        item.className = "catalog-text-expand";
    } else {
        // expand
        item.className = "catalog-text-shrink";
    }
}
