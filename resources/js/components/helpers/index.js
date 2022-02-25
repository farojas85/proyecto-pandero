const addChildScript = (urlChild,IdParent) =>{
    var script = document.createElement('script')
    var url =urlChild;
    script.type ="text/javascript"
    script.src = 'app-assets/'+url
    $(IdParent).append(script)
}

const addChildStyle = (urlChild,IdParent) =>{
    var link = document.createElement('Link')
    var url =urlChild;
    link.type ="text/css"
    link.rel="styleSheet"
    link.href = 'app-assets/'+url
    $(IdParent).append(link)
}

const defineTitle = (title) => {
    let sistema = "Pandero";
    document.title = title +" | "+sistema
}
export default {
    addChildScript, addChildStyle, defineTitle
}
