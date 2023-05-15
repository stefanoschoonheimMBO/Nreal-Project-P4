import { Editor } from "https://cdn.jsdelivr.net/npm/@tiptap/core@2.0.3/+esm";
import Starterkit from "https://cdn.jsdelivr.net/npm/@tiptap/starter-kit@2.0.3/+esm";

let editor = new Editor({
    element: document.querySelector("main .editor"),
    extensions: [Starterkit],
    content: data,
});

const headingBtns = document.querySelectorAll(".heading-btn");
const url_input = document.querySelector("input#url");

headingBtns.forEach((el) => {
    el.addEventListener("click", () => {
        console.log("heading clicked", el.dataset);
        editor.commands.toggleHeading({
            level: parseInt(el.dataset["heading"]),
        });
    });
});

const blockquoteBtns = document.querySelectorAll(".blockquote-btn");
blockquoteBtns.forEach((el) => {
    el.addEventListener("click", () => {
        editor.commands.toggleBlockquote();
    });
});

const saveBtn = document.querySelector(".save-btn");
saveBtn.addEventListener("click", async () => {
    let fetch_url = create ? "/api/create" : "/api/update";
    let url_output = url_input.value;
    if (url != "") {
        url_output = url;
    }
    console.log(url_input.value);
    let res = await fetch(fetch_url, {
        method: "POST",
        body: JSON.stringify({
            data: editor.getHTML(),
            url: url_output,
        }),
    });
    if (create) {
        window.location.href = `/content/update/${url_output}`;
    }
});
