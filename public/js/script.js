// Code goes here

$(".js-data-example-ajax").select2({
  ajax: {
    url: "http://geocode-maps.yandex.ru/1.x/",
    dataType: 'json',
    delay: 250,
    data: function (query) {
      if (!query) query = 'Москва';
      
      return {
        geocode: query,
        format: 'json'
      };
    },
    results: function (data) {
      var parsed = [];
      
      try {
        parsed = _.chain(data.response.GeoObjectCollection.featureMember)
          .pluck('GeoObject')
          .map(function (item, index) {
            return {
              id: index,
              text: item.name
            };
          })
          .value();
      } catch (e) { }
      
      return {
        results: parsed
      };
    },
    cache: true
  }
});
