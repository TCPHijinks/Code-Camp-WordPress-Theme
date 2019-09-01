using RestSharp;
using Newtonsoft;
using System;
using System.Collections.Generic;
using System.Diagnostics;
using System.Linq;
using System.Net;
using System.Text;
using System.Threading;
using System.IO;
using Newtonsoft.Json;
using Newtonsoft.Json.Linq;

namespace Test_Console_App
{
    // Get and display top player with kills and top player with flags captured.
    


    class Program
    {
       

        static void Main(string[] args)
        {            
            var client = new RestClient("https://graph.facebook.com"); // New client.
            var request = new RestRequest(Method.GET);
            var pageAccessToken = "EAASbCzWmSTUBAH2D80AOXZANhHYVqkc7acQZCqCzGgO4ZAyaUZB0l03MlzXlalnMe5tnV06B2LjR8RJVGKZAD0RRBRlwnbdMXMVYUeBhzFIYnKxvbpHZB4DmN8yQBGxrBjUzuZB1mK7J5uSOdzG2jNhiQI0QqZBUqpUX0AETOQqxvuxyzMWyqpdX";

            // Main request body.
            request.Resource = "{version}/me/albums"; // Request template.
            request.AddParameter("version", "v4.0", ParameterType.UrlSegment);
           
            // What to get + token for verification (needs renewing every 2 months).
            request.AddParameter("fields", "['photos{images}','name','description']"); // Fields to get.
            request.AddParameter("access_token", pageAccessToken);  // Pass access token for page.

            var response = client.Execute(request);
           

            






            // TO DO: SAVE THUMBNAIL VER OF IMG TO IMG CLASS AS THUMBNAIL IMAGE.
           // using (StreamReader r = new StreamReader("file.json"))
           // {
           //     string json = r.ReadToEnd();
                JObject pageJson = JObject.Parse(response.Content);

                // Get albums and deserialize to Album class objects.
                List<JToken> jAlbums = pageJson["data"].Children().ToList(); // Album jtokens.
                List<Album> albums = new List<Album>(); // Album objects to deserialize to.
                foreach(JToken album in jAlbums)
                {
                    try
                    {
                        string id = album.SelectToken("id").ToString();
                        string name = album.SelectToken("name").ToString();
                        string desc = album.SelectToken("description").ToString();

                        albums.Add(new Album(id, name, desc));
                    }
                    catch (Exception e) { }
                }

                

               
               
                // Iterate through all albums.
                for (int i = 0; i < albums.Count; i++)
                {                    
                    // Get photos inside album (each photo contains multiple versions of the Image).
                    List<JToken> jPhotos = pageJson.SelectToken("data["+i+"].photos.data").ToList(); // Num of photos.                  
                    List<Image> images = new List<Image>(); 
                                       
                    for(int j = 0; j < jPhotos.Count; j++)
                    {
                        // Save attributes of best quality image ([0]) in current photo (j) of the current album (i).
                        int height = (int)pageJson.SelectToken("data[" + i + "].photos.data[" + j + "].images[0].height"); 
                        int width = (int)pageJson.SelectToken("data[" + i + "].photos.data[" + j + "].images[0].width");
                        string source = (string)pageJson.SelectToken("data[" + i + "].photos.data[" + j + "].images[0].source");

                        images.Add(new Image(height, width, source));
                    }

                    albums[i].images = images;
                }

                Console.WriteLine("ID:: " + albums[0].id);
                Console.WriteLine("NAME:: " + albums[0].name);
                Console.WriteLine("DESCRIPTION:: " + albums[0].description);
                Console.WriteLine("NUM PHOTOS:: " + albums[0].images.Count);
       //    }



            Console.ReadKey();
      }
    }
   



    


   
}
