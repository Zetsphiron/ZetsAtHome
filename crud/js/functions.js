// JS functions inside of here. Proceed with caution.

function confirm() {
    if (confirm("Are you sure you want to delete? This cannot be undone.")) {
        return true;
    }
    return false;
}

function confirmMod() {
    if (confirm("Are you sure you want to update? This cannot be undone after editing.")) {
        return true;
    }
    return false;
}