using RestSharp;
using System;
using System.Collections.Generic;
using System.Diagnostics;
using System.Linq;
using System.Net;
using System.Text;
using System.Threading;


namespace Test_Console_App
{
    // Get and display top player with kills and top player with flags captured.
    


    class Program
    {
       

        static void Main(string[] args)
        {
            var client = new RestClient("https://graph.facebook.com"); // New client.
            var request = new RestRequest(Method.GET);
            var accessToken = "EAASbCzWmSTUBANgZBi9Xpf3C6JK6q3AttASyNgvUr1tik3vj59w71IQceLLzkT6EwZB1NhCgHA9MvdryquPmEGBXS4d2YwqAbhT9N14NYgZA032SyeN3ypOYz63oRn6H9669Qa15OzMAxVx8pmeXKsHQeQa9fPy6FwFIhoBfMZB729fG18s3GzZAZBRsReB9UZD";

            request.Resource = "{version}/{campaign_id}/albums";
            request.AddParameter("version", "v4.0", ParameterType.UrlSegment);
            request.AddParameter("campaign_id", "1889029911374206", ParameterType.UrlSegment);
            request.AddParameter("fields", "['name', 'id']");
            request.AddParameter("access_token", accessToken);

            var response = client.Execute(request);
            Console.WriteLine(response.Content);
           

                Console.ReadKey();
        }


     
        
      
        
    }



   

  
}
