const dark = window.matchMedia("(prefers-color-scheme: dark)");
dark.addEventListener("change",switchTheme);
function switchTheme()
{
    if(dark.matches) document.documentElement.dataset.theme = "dark";
    else delete document.documentElement.dataset.theme;
}
switchTheme();