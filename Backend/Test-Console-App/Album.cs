using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Test_Console_App
{
    public class Album
    {
        public string id { get; set; }
        public string name { get; set; }
        public string description { get; set; }
        public List<Image> images;

        public Album(string id, string name, string description)
        {
            this.id = id;
            this.name = name;
            this.description = description;
        }
    }
}
