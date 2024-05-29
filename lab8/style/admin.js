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