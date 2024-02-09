var tags = new Bloodhound({
  prefetch: '/tags.json',
  datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name'),
  queryTokenizer: Bloodhound.tokenizers.whitespace,
})
$('.tags-input').tagsinput({
  typeaheadjs: [{
    highlights: true
  }, {
    name: 'tags',
    display: 'name',
    value: 'name',
    source: tags
  }]
})
