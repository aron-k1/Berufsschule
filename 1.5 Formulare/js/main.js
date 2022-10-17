function changeCurrentActiveNav(anchor) {
    var zutritt = document.getElementById("zutritt_nav");
    zutritt.className = zutritt.className.replace(' active', '');
    var contact = document.getElementById("contact_nav");
    contact.className = contact.className.replace(' active', '');
    var bank = document.getElementById("bank_nav");
    bank.className = bank.className.replace(' active', '');
    var form = document.getElementById("form_nav");
    form.className = bank.className.replace(' active', '');
    const currentElement = document.getElementById(anchor);
    currentElement.className = currentElement.className + " active";

}
