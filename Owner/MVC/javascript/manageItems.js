function deleteItem(itemId) {
    if (!confirm("Are you sure?")) return;

    fetch("../controller/deleteItems.php?id=" + itemId)
        .then(() => {
            document.getElementById("item-" + itemId).remove();
        });
}
