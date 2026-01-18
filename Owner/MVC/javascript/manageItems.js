function toggleStatus(itemId){
    fetch("../controller/toggleStatus.php?id=" + itemId).then(response => response.text()).then(newStatus => {document.getElementById("status-" + itemId).innerHTML = "<strong>Status: </strong> " + newStatus; });
}