using Microsoft.EntityFrameworkCore;
using Microsoft.Extensions.DependencyInjection;
using System;
using System.Linq;

namespace CodingOnCountry.Models
{
    public class SeedData
    {
        public static void Initialize(IServiceProvider serviceProvider)
        {
            using (var context = new CodingOnCountryContext(
                serviceProvider.GetRequiredService<
                    DbContextOptions<CodingOnCountryContext>>()))
            {
                // Check if any existing camps in db or if need to seed.
                if (context.Camp.Any())
                {
                    return;   // DB has already been seeded.
                }
              
                context.Camp.AddRange(
                   new Camp
                   {                      
                       Name = "Latest Real Code Camp!",
                       Description = "The shortest remaining time first policy is a pre-emptive scheduling algorithm. In this case, thescheduler always chooses the process that has the shortest expected remaining processing time.When a new process joins the ready queue,t may in fact have a shorter remaining time than thecurrently running process.Accordingly,the scheduler may pre - empt the current process when aew process becomes ready.The scheduler must have an estimate of processing time to performthe selection function, and there is a risk of starvation of longer processes.Find the average waiting time for the processes below with the given arrival time and burst timesand the finish time for each process",
                       CampCommunity = "Internet Cool Kids.",
                       CampAddress = "12 Fan St, Cornubia South QLD",                       
                       CampDate = DateTime.Now.Date,
                       CampStartTime = DateTime.Now.AddDays(-.01),
                       CampEndTime = DateTime.Now.AddDays(-0.5)
                   },
                    new Camp
                    {                        
                        Name = "Another Camp!",
                        Description = "Before Stargazers and the revolution of Building Better Worlds, the war-torn wasteland held one last great city, ruled by gods among men. These half-machine leaders showed contempt for those beneath them, so a plan to usurp their power began. Dystopian Fiction the last in its trilogy, and tells the forgotten stories that would lead to the inevitable uprising against evil. Themes present on",
                        CampCommunity = "Under Sky Co.",
                        CampAddress = "A bridge, NK",
                        CampDate = DateTime.Now.AddDays(-24).Date,
                        CampStartTime = DateTime.Now.AddDays(-24),
                        CampEndTime = DateTime.Now.AddDays(-23.5)
                    },
                     new Camp
                     {                         
                         Name = "Tripple the Trouble!",
                         Description = "ustin Rowe, Caleb Haynes, Chris Shenkir, Arsene Vulpin, Metri Konor, ThisSideofOblivion, LeoValkenhein, Todtaure, CommentIsUnrelated, Nicolas Martinez, Daniel Hakimian, Ross Plain, Andrew Kazenas, Adam, Levi Snyder, Christian Juel Martinsen, Tyler Shouse, Jiutti, Kevin Hainsworth, Rocco Triple, Alex Kaiser, Hunter Davis, Peter, Lily Kaempfer, and Tempestfury",
                         CampCommunity = "Internet Cool Kids.",
                         CampAddress = "12 Fan St, Cornubia South QLD",
                         CampDate = DateTime.Now.AddDays(-54).Date,
                         CampStartTime = DateTime.Now.AddDays(-113.9),
                         CampEndTime = DateTime.Now.AddDays(-114.1)
                     },
                    new Camp
                    {                      
                        Name = "Coolest Code Camp!",
                        Description = "Our first code camp! This is a code camp and stuff, very good stuff! Ain't that cool? Damn that's cool! BTW, Write with confidence, knowing intelligent technology can help with spelling, grammar and even stylistic writing suggestions. With tools at your fingertips, easily go from pen and paper to digital inking and edit intuitively. Get all the information you need as you write without leaving Word ...",
                        CampCommunity = "Internet.",
                        CampAddress = "12 Fan St, Cornubia South QLD",
                        EmbededFacebookAlbumLink = "<iframe src=\"https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fpermalink.php%3Fstory_fbid%3D102453861160791%26id%3D102446757828168&width=500\" width=\"500\" height=\"764\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allow=\"encrypted-media\"></iframe>",
                        CampDate = DateTime.Now.AddDays(-54).Date,
                        CampStartTime = DateTime.Now.AddDays(-53.3),
                        CampEndTime = DateTime.Now.AddDays(-54)
                    },
                    new Camp
                    {
                        Name = "Not so bad Camp!",
                        Description = "When you deploy the app to a test or production server, you can use an environment variable or another approach to set the connection string to a real SQL Server. See Configuration for more information.",
                        CampCommunity = "Internet.",
                        CampAddress = "12 Fan St, Cornubia South QLD",
                        EmbededFacebookAlbumLink = "<iframe src=\"https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fpermalink.php%3Fstory_fbid%3D102453064494204%26id%3D102446757828168&width=500\" width =\"500\" height=\"764\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allow=\"encrypted-media\"></iframe>",
                        CampDate = DateTime.Now.AddDays(-4).Date,
                        CampStartTime = DateTime.Now.AddDays(-4),
                        CampEndTime = DateTime.Now.AddDays(-3.9)
                    },
                    new Camp
                    {
                        Name = "That camp!",
                        Description = "LocalDB is a lightweight version of the SQL Server Express Database Engine that's targeted for program development. LocalDB starts on demand and runs in user mode, so there's no complex configuration. By default, LocalDB database creates .mdf files in th",
                        CampCommunity = "Internet.",
                        CampAddress = "12 Fan St, Cornubia South QLD",
                        EmbededFacebookAlbumLink = "<iframe src=\"https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fmedia%2Fset%2F%3Fset%3Da.102451547827689%26type%3D3&width=500\" width=\"500\" height=\"764\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allow=\"encrypted-media\"></iframe>",
                        CampDate = DateTime.Now.AddDays(-54).Date,
                        CampStartTime = DateTime.Now.AddDays(-254.5),
                        CampEndTime = DateTime.Now.AddDays(-254.1)
                    },
                    new Camp
                    {
                        Name = "A camp!",
                        Description = "Controllers: Classes that handle browser requests. They retrieve model data and call view templates that return a response. In an MVC app, the view only displays information; the controller handles and responds to user input and interaction. For example, the controller handles route data and query-string values, and passes these values to the model. The model might use these values to query the database. For example",
                        CampCommunity = "Internet.",
                        CampAddress = "12 Fan St, Cornubia South QLD",
                        EmbededFacebookAlbumLink = "<iframe src=\"https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fpermalink.php%3Fstory_fbid%3D102450584494452%26id%3D102446757828168&width=500\" width=\"500\" height=\"764\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allow=\"encrypted-media\"></iframe>",
                        CampDate = DateTime.Now.AddDays(-54).Date,
                        CampStartTime = DateTime.Now.AddDays(-254.5),
                        CampEndTime = DateTime.Now.AddDays(-254.1)
                    }
                ); 
                
                
                context.SaveChanges();

            }
        }
    }
}
