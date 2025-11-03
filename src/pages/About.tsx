import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import { Button } from "@/components/ui/button";
import { Link } from "react-router-dom";
import Navbar from "@/components/Navbar";
import Footer from "@/components/Footer";
import { Target, Eye, Award, Globe } from "lucide-react";

const About = () => {
  const values = [
    {
      icon: Target,
      title: "Our Mission",
      description: "To revolutionize agriculture through sustainable innovation, providing solutions that nourish the world while protecting our planet for future generations.",
    },
    {
      icon: Eye,
      title: "Our Vision",
      description: "A world where agriculture thrives in harmony with nature, where farmers have access to cutting-edge sustainable solutions, and where food security meets environmental stewardship.",
    },
    {
      icon: Award,
      title: "Our Commitment",
      description: "Unwavering dedication to quality, sustainability, and innovation. We hold ourselves to the highest standards in everything we do.",
    },
    {
      icon: Globe,
      title: "Global Reach",
      description: "Operating in over 50 countries, we bring sustainable agricultural solutions to farmers worldwide while respecting local needs and ecosystems.",
    },
  ];

  const milestones = [
    { year: "2010", event: "ReVert founded with a vision for sustainable agriculture" },
    { year: "2015", event: "Launched first biological crop protection product line" },
    { year: "2018", event: "Expanded operations to 25 countries" },
    { year: "2020", event: "Achieved carbon-neutral manufacturing" },
    { year: "2023", event: "Introduced revolutionary soil microbiome technology" },
    { year: "2024", event: "Serving 50+ countries with 1M+ farmers" },
  ];

  return (
    <div className="min-h-screen flex flex-col">
      <Navbar />
      
      <section className="py-20 bg-gradient-to-b from-accent/20 to-background">
        <div className="container">
          <div className="max-w-3xl mx-auto text-center mb-16">
            <h1 className="text-4xl md:text-5xl font-bold mb-6">About ReVert</h1>
            <p className="text-xl text-muted-foreground">
              Pioneering sustainable agriculture for over a decade, transforming farming practices worldwide
            </p>
          </div>

          <div className="grid md:grid-cols-2 gap-8 mb-16">
            {values.map((value, index) => (
              <Card key={index}>
                <CardHeader>
                  <value.icon className="h-12 w-12 text-accent mb-4" />
                  <CardTitle>{value.title}</CardTitle>
                  <CardDescription className="text-base">{value.description}</CardDescription>
                </CardHeader>
              </Card>
            ))}
          </div>
        </div>
      </section>

      <section className="py-16 bg-muted">
        <div className="container">
          <div className="max-w-4xl mx-auto">
            <h2 className="text-3xl font-bold mb-8 text-center">Our Story</h2>
            <div className="prose prose-lg max-w-none space-y-4 text-muted-foreground mb-12">
              <p>
                ReVert was founded in 2010 by a group of agricultural scientists and environmental advocates who shared a common vision: to transform agriculture into a force for environmental regeneration rather than degradation.
              </p>
              <p>
                Starting with a small research facility and a handful of innovative products, we've grown into a global leader in sustainable agricultural solutions. Our success is built on rigorous science, genuine partnerships with farmers, and an unwavering commitment to environmental stewardship.
              </p>
              <p>
                Today, we serve over one million farmers across 50 countries, helping them increase productivity while reducing their environmental impact. But our mission remains unchanged: to innovate agriculture for a sustainable future.
              </p>
            </div>

            <h3 className="text-2xl font-bold mb-6">Our Journey</h3>
            <div className="space-y-4 mb-12">
              {milestones.map((milestone, index) => (
                <div key={index} className="flex items-start gap-4 p-4 bg-card rounded-lg">
                  <div className="flex-shrink-0">
                    <div className="w-16 h-16 rounded-full bg-accent/20 flex items-center justify-center">
                      <span className="font-bold text-accent">{milestone.year}</span>
                    </div>
                  </div>
                  <div className="pt-3">
                    <p className="text-foreground">{milestone.event}</p>
                  </div>
                </div>
              ))}
            </div>

            <div className="bg-primary text-primary-foreground rounded-lg p-8 text-center">
              <h3 className="text-2xl font-bold mb-4">Join Us on Our Journey</h3>
              <p className="text-lg mb-6 opacity-90">
                Be part of the agricultural revolution. Discover how ReVert can help transform your farming operation.
              </p>
              <div className="flex gap-4 justify-center">
                <Button size="lg" variant="secondary" asChild>
                  <Link to="/contact">Get In Touch</Link>
                </Button>
                <Button size="lg" variant="outline" asChild className="border-primary-foreground text-primary-foreground hover:bg-primary-foreground hover:text-primary">
                  <Link to="/sustainability">Our Sustainability</Link>
                </Button>
              </div>
            </div>
          </div>
        </div>
      </section>

      <Footer />
    </div>
  );
};

export default About;
