using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Test_Console_App
{
    public class Image
    {
        public int height { get; set; }
        public int width { get; set; }
        public string source { get; set; }

        public Image(int height, int width, string source)
        {
            this.height = height;
            this.width = width;
            this.source = source;
        }
    }
}
