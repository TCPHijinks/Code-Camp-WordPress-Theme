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
                // Look for any movies.
                if (context.Camp.Any())
                {
                    return;   // DB has been seeded
                }

                context.Camp.AddRange(
                    new Camp
                    {
                        Id = 1,
                        Name = "First Code Camp!",
                        Description = "Our first code camp! This is a code camp and stuff, very good stuff! Ain't that cool? Damn that's cool!",
                        CampCommunity = "Muja Muja",
                        CampAddress = "12 Fan St, Suburb QLD",
                        EmbededFacebookAlbumLink = "https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fmedia%2Fset%2F%3Fset%3Da.113134773390748%26type%3D3&width=500",
                        CampDate = DateTime.Now.AddDays(-54).Date,
                        CampStartTime = DateTime.Now.AddDays(-54),
                        CampEndTime = DateTime.Now.AddDays(-54.1)
                    },
                    new Camp
                    {
                        Id = 1,
                        Name = "Second Code Camp!",
                        Description = "Our second code camp! This is a code camp and stuff, very good stuff! Ain't that cool? Damn that's cool!",
                        CampCommunity = "Muja Muja",
                        CampAddress = "12 Fan St, Suburb QLD",
                        EmbededFacebookAlbumLink = "https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fmedia%2Fset%2F%3Fset%3Da.113138956723663%26type%3D3&width=500",
                        CampDate = DateTime.Now.AddDays(-24).Date,
                        CampStartTime = DateTime.Now.AddDays(-24),
                        CampEndTime = DateTime.Now.AddDays(-24.1)
                    },
                    new Camp
                    {
                        Id = 1,
                        Name = "Third Code Camp!",
                        Description = "Our third code camp! This is a code camp and stuff, very good stuff! Ain't that cool? Damn that's cool!",
                        CampCommunity = "Muja Muja",
                        CampAddress = "12 Fan St, Suburb QLD",
                        EmbededFacebookAlbumLink = "https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fmedia%2Fset%2F%3Fset%3Da.117150296322529%26type%3D3&width=500",
                        CampDate = DateTime.Now.Date,
                        CampStartTime = DateTime.Now.AddHours(5),
                        CampEndTime = DateTime.Now.AddHours(8)
                    }
                ) ;
                context.SaveChanges();
            }
        }
    }
}
