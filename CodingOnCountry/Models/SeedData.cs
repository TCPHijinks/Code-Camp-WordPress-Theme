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
                        Name = "First Code Camp!",
                        Description = "Our first code camp! This is a code camp and stuff, very good stuff! Ain't that cool? Damn that's cool!",
                        CampCommunity = "Muja Muja",
                        CampAddress = "12 Fan St, Suburb QLD",
                        EmbededFacebookAlbumLink = "https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fmedia%2Fset%2F%3Fset%3Da.113134773390748%26type%3D3&width=500",
                        CampDate = DateTime.Now.AddDays(-54).Date,
                        CampStartTime = DateTime.Now.AddDays(-54),
                        CampEndTime = DateTime.Now.AddDays(-54.1)
                    }
                );              
                context.SaveChanges();

            }
        }
    }
}
