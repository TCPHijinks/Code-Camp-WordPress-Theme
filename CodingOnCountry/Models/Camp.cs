using System;
using System.Collections.Generic;
using System.ComponentModel.DataAnnotations;
using System.Linq;
using System.Threading.Tasks;

namespace CodingOnCountry.Models
{
    public class Camp
    {
        public int Id { get; set; }
        public string Name { get; set; }
        public string Description { get; set; }
       
        public string CampCommunity { get; set; }
        public string CampAddress { get; set; }

        public string EmbededFacebookAlbumLink { get; set; }
        
        [Display(Name = "Camp Date")]
        [DataType(DataType.Date)]
        public DateTime CampDate { get; set; }

        [Display(Name = "Camp Start Time")]
        [DataType(DataType.Time)]
        public DateTime CampStartTime { get; set; }

        [Display(Name = "Camp End Time")]
        [DataType(DataType.Time)]
        public string CampEndTime { get; set; }

        
      
    }
}
