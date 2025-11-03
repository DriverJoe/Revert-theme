import { Button } from "@/components/ui/button";
import { Card, CardContent, CardDescription, CardHeader, CardTitle } from "@/components/ui/card";
import { Link } from "react-router-dom";
import Navbar from "@/components/Navbar";
import Footer from "@/components/Footer";
import { GraduationCap, HandHeart, Sprout, Users } from "lucide-react";

const CommunityPrograms = () => {
  const programs = [
    {
      icon: GraduationCap,
      title: "Farmer Education",
      description: "Free workshops and training programs on sustainable farming practices",
      impact: "5,000+ farmers trained annually",
    },
    {
      icon: HandHeart,
      title: "Community Support",
      description: "Grants and resources for small-scale farmers and local communities",
      impact: "$2M+ in community investment",
    },
    {
      icon: Sprout,
      title: "Youth Programs",
      description: "Inspiring the next generation of agricultural innovators",
      impact: "50+ schools participating",
    },
    {
      icon: Users,
      title: "Cooperative Development",
      description: "Supporting farmer cooperatives and collective action",
      impact: "200+ cooperatives supported",
    },
  ];

  return (
    <div className="min-h-screen flex flex-col">
      <Navbar />
      
      <section className="py-16 bg-gradient-to-b from-accent/20 to-background">
        <div className="container">
          <div className="max-w-3xl mx-auto text-center mb-12">
            <h1 className="text-4xl md:text-5xl font-bold mb-4">Community Programs</h1>
            <p className="text-xl text-muted-foreground">
              Empowering communities through education, support, and sustainable development
            </p>
          </div>

          <div className="grid md:grid-cols-2 gap-6 mb-16">
            {programs.map((program, index) => (
              <Card key={index}>
                <CardHeader>
                  <program.icon className="h-12 w-12 text-accent mb-4" />
                  <CardTitle>{program.title}</CardTitle>
                  <CardDescription>{program.description}</CardDescription>
                </CardHeader>
                <CardContent>
                  <div className="bg-accent/10 rounded-lg p-4 mt-2">
                    <p className="font-semibold text-accent">{program.impact}</p>
                  </div>
                </CardContent>
              </Card>
            ))}
          </div>

          <div className="max-w-4xl mx-auto">
            <h2 className="text-3xl font-bold mb-6">Making a Difference Together</h2>
            <div className="prose prose-lg max-w-none space-y-4 text-muted-foreground mb-8">
              <p>
                Our community programs are built on the belief that sustainable agriculture starts with empowered communities. Through education, support, and collaboration, we're helping create a more resilient and sustainable agricultural sector.
              </p>
              <p>
                From hands-on training workshops to youth education initiatives, we're investing in people who will shape the future of agriculture. Our programs are designed to be accessible, practical, and impactful—creating lasting change in communities around the world.
              </p>
            </div>
            <div className="flex gap-4">
              <Button asChild size="lg">
                <Link to="/contact">Get Involved</Link>
              </Button>
              <Button asChild variant="outline" size="lg">
                <Link to="/sustainability">Sustainability Overview</Link>
              </Button>
            </div>
          </div>
        </div>
      </section>

      <Footer />
    </div>
  );
};

export default CommunityPrograms;
