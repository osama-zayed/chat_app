const userButton = document.querySelector(".user-button");
const roomButton = document.querySelector(".room-button");
const userText = document.querySelector(".All-users-content");
const roomText = document.querySelector(".rooms-content");
const PersonalInformationButton = document.querySelector(".PersonalInformationButton");
const OptionsButton = document.querySelector(".OptionsButton");
const WritingMethodsButton = document.querySelector(".WritingMethodsButton");
const InformationButton = document.querySelector(".InformationButton");
const PersonalInformationContent = document.querySelector(".PersonalInformationContent");
const OptionsContent = document.querySelector(".OptionsContent");
const WritingMethodsContent = document.querySelector(".WritingMethodsContent");
const InformationContent = document.querySelector(".InformationButton");

function openWindow(route, width, height) {//فتح الشاسه المنبثقة
    var left = (window.screen.width - width) / 2;
    var top = (window.screen.height - height) / 2;
    var windowFeatures = `top=${top},left=${left},width=${width},height=${height},resizable=no`;
    window.open(route, '_blank', windowFeatures);
}

userButton.addEventListener("click", function () {
    userText.style.display = "block";
    roomText.style.display = "none";
    userButton.classList.add("active");
    roomButton.classList.remove("active");
});

roomButton.addEventListener("click", function () {
    userText.style.display = "none";
    roomText.style.display = "block";
    roomButton.classList.add("active");
    userButton.classList.remove("active");
});

//التنقل الخاص بصفحة الهيئة
PersonalInformationButton.addEventListener("click", function () {

    PersonalInformationButton.classList.add("active");
    OptionsButton.classList.remove("active");
    WritingMethodsButton.classList.remove("active");
    InformationButton.classList.remove("active");

    PersonalInformationContent.classList.add("d-block");
    PersonalInformationContent.classList.remove("d-none");
    OptionsContent.classList.remove("d-block");
    OptionsContent.classList.add("d-none");
    WritingMethodsContent.classList.remove("d-block");
    WritingMethodsContent.classList.add("d-none");
    InformationContent.classList.remove("d-block");
    InformationContent.classList.add("d-none");

});
OptionsButton.addEventListener("click", function () {
    PersonalInformationButton.classList.remove("active");
    OptionsButton.classList.add("active");
    WritingMethodsButton.classList.remove("active");
    InformationButton.classList.remove("active");

    PersonalInformationContent.style.display = "none";
    WritingMethodsContent.style.display = "none";
    InformationContent.style.display = "none";
    OptionsContent.style.display = "block";

});
WritingMethodsButton.addEventListener("click", function () {
    PersonalInformationButton.classList.remove("active");
    OptionsButton.classList.remove("active");
    WritingMethodsButton.classList.add("active");
    InformationButton.classList.remove("active");

    PersonalInformationContent.classList.remove("d-block");
    OptionsContent.classList.remove("d-block");
    WritingMethodsContent.classList.add("d-block");
    InformationContent.classList.remove("d-block");

});
InformationButton.addEventListener("click", function () {
    PersonalInformationButton.classList.remove("active");
    OptionsButton.classList.remove("active");
    WritingMethodsButton.classList.remove("active");
    InformationButton.classList.add("active");

    PersonalInformationContent.classList.remove("d-block");
    OptionsContent.classList.remove("d-block");
    WritingMethodsContent.classList.remove("d-block");
    InformationContent.classList.add("d-block");

});
