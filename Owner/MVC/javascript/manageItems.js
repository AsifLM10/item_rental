function toggleStatus(itemId) {
    fetch("../controller/toggleStatus.php?id=" + itemId)
        .then(res => res.text())
        .then(newStatus => {
            const statusEl = document.getElementById("status-" + itemId);
            if (statusEl) {
                statusEl.innerHTML = "<strong>Status:</strong> " + newStatus;
            }
        });
}
