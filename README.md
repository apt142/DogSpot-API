#Notes

End Points:

/user/:userid
// Information about a user

/my/:userid
// List of Dogs belonging to the user

/dog/:dogid
// Information about a dog/sighting


Dog Lists:

/dogs/?
    :lat        (current lat off of geolocation or ip address)
    :long       (current long off of geolocation or ip address)
    :radius     (average range of a very large dog in one day)
    :timeframe  (Last 72 hours?)
// List of dogs in a given :latitude/:longitude in a given :timeframe and :radius


/like-dog/:dogid?
    :radius     (average range of a very large dog in one day)
    :timeframe  (Last 72 hours?)
// Dogs like a :dogid in a given :radius and :timeframe

/lost-dogs/:userid
// Dogs reported missing by :userid

/spotted-dogs/:userid
// Dogs reported missing by :userid

/found-dogs/:userid
// Dogs reported found by :userid

/breeds
// List of Breeds

/sizes
// List of Dog Sizes

/dog-colors
// List of Dog Colors

/characteristics
// List of Dog Characteristics & Possible Values