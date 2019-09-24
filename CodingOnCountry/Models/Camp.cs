using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.Linq;
using System.Text.RegularExpressions;
using System.Threading.Tasks;

namespace CodingOnCountry.Models
{
    public class Camp
    {
        public int Id { get; set; }
        public string Name { get; set; }
        public string Description { get; set; }
        [Display(Name = "Camp Community")]
       
        public string CampCommunity { get; set; }
        [Display(Name = "Camp Address")]
        public string CampAddress { get; set; }
        
        [Display(Name = "Facebook Embed Link")]
        public string EmbededFacebookAlbumLink { get; set; }

        /*
        private string FormatAlbumLink()
        {
            if (this.link == null)
                return " ";
            string link = this.link;
            var match = Regex.Match(link, @"key : (.+?) width=").Groups[1].Value;

            if(match != null)
                return match;
            return this.link;
        }
        */

        [Display(Name = "Camp Date")]
        [DataType(DataType.Date)]
        public DateTime CampDate { get; set; } = DateTime.Now;

        [Display(Name = "Camp Start Time")]
        [DataType(DataType.Time)]
        public DateTime CampStartTime { get; set; } = DateTime.Now;

        [Display(Name = "Camp End Time")]
        [DataType(DataType.Time)]
        public DateTime CampEndTime { get; set; }

        
      
    }
}
