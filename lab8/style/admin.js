function author_photo_click() {
    console.log('click!')
}

function upload_hero_image() {
    console.log('click!')
    print()
}

function change_title() {
    let title = document.getElementById('post_title').value
    document.getElementById('text-header').innerHTML = title
    document.getElementById("article-info__header").innerHTML = title
}

function change_subscription() {
    let subscription = document.getElementById('description').value
    document.getElementById('article-info__underheader').innerHTML = subscription
    document.getElementById('text__subscription').innerHTML = subscription
}

function change_author_name() {
    let author_name = document.getElementById('author-name').value
    document.getElementById('human__subscription').innerHTML = author_name
}

function change_publish_date() {
    let publish_date = document.getElementById('publish-date').value
    document.getElementById('extra_avatar__date').innerHTML = publish_date
}

function setAuthorPhoto() {

}

function heroImageUpload() {
    const preview = document.getElementById("hero");
    const articleImage =  document.getElementById("article_image")
    const file = document.querySelector("input[type=file]").files[0];
    const reader = new FileReader()
  
    reader.addEventListener(
      "load",
      () => {
        preview.style.backgroundImage = "url(" +  reader.result + ")"
        preview.style.backgroundPosition = "center top"
        preview.style.backgroundSize = "100%"
        articleImage.src =  reader.result
      },
      false,
    );
  
    if (file) {
      reader.readAsDataURL(file)
    }
}
  
function lowerHeroImageUpload() {
    const preview = document.getElementById("low-hero");
    const articleImage =  document.getElementById("hero_lower")
    const file = document.querySelector("input[type=file]").files[0];
    const reader = new FileReader()
  
    reader.addEventListener(
      "load",
      () => {
        preview.style.backgroundImage = "url(" +  reader.result + ")"
        preview.style.backgroundPosition = "center top"
        preview.style.backgroundSize = "100%"
        articleImage.src =  reader.result
      },
      false,
    );
  
    if (file) {
      reader.readAsDataURL(file)
    }
}

function publishClick() {
    let title = document.getElementById('post_title').value
    let subscription = document.getElementById('description').value
    let author_name = document.getElementById('author-name').value
    let publish_date = document.getElementById('publish-date').value
    let article_image = document.getElementById("article_image").src
    let author_photo = document.getElementById("author_photo").src
    let text = document.getElementById("content").value

    let jsonFile = '{\n"title": "' + title + '",\n"subscription": "' + subscription + '",\n"author_photo": "' + author_photo + '",\n"author_name": "' + author_name + '",\n"date": "' + publish_date + '12:00:00",\n"post_text": "' + text + '",\n"image": "' + article_image + '",\n"featured": "0"'
    console.log(jsonFile)
}